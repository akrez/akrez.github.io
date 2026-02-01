<?php

class SqliteDatabase
{
    public function __construct($databaseFilePath)
    {
        $pdo = new PDO('sqlite:'.$databaseFilePath);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        $this->setPdo($pdo);
    }

    /**
     * pdo
     */
    protected $pdo;

    protected function setPdo(PDO $pdo)
    {
        return $this->pdo = $pdo;
    }

    protected function getPdo()
    {
        return $this->pdo;
    }

    /**
     * base commands
     */
    public function execute($sql, $binds = [])
    {
        $result = $this->getPdo()->prepare($sql);
        $result->execute($binds);

        return $result;
    }

    /**
     * crud commands
     */
    public function create($table, $attributes)
    {
        $binds = [];
        foreach ($attributes as $attributeName => $attributeValue) {
            $binds[':'.$attributeName] = $attributeValue;
        }
        $sql = 'INSERT INTO '.$table.' ('.implode(', ', array_keys($attributes)).') VALUES ('.implode(', ', array_keys($binds)).')';
        $this->execute($sql, $binds);

        return $this->getPdo()->lastInsertId();
    }

    public function read($table, $where = '', $binds = [], $fields = '*', $limit = 0, $orderBy = ' ORDER BY id DESC ')
    {
        $where = trim($where);
        $sql = 'SELECT '.$fields.' FROM '.$table.($where ? ' WHERE '.$where : '').' '.$orderBy;

        $statement = $this->execute($sql, $binds);

        $result = [];
        if ($statement) {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            for ($i = 0; (empty($limit) or $i < $limit) and $row = $statement->fetch(); $i++) {
                $result[] = $row;
            }
        }

        return $result;
    }

    public function update($table, $attributes, $where, $binds = [])
    {
        $bindKeysPrefix = ':_update_';
        if (count($binds)) {
            $bindKeysMaxLength = max(array_map('strlen', array_keys($binds)));
            $bindKeysPrefix = str_pad($bindKeysPrefix, $bindKeysMaxLength, '_');
        }

        $assigns = [];
        foreach ($attributes as $attributeName => $attributeValue) {
            $assigns[] = ($attributeName.' = '.$bindKeysPrefix.$attributeName);
            $binds[$bindKeysPrefix.$attributeName] = $attributeValue;
        }

        $where = trim($where);
        $sql = 'UPDATE '.$table.' SET '.implode(', ', $assigns).($where ? ' WHERE '.$where : '');
        $result = $this->execute($sql, $binds);

        return $result->rowCount();
    }

    public function delete($table, $where, $binds = [])
    {
        $where = trim($where);
        $sql = 'DELETE FROM '.$table.($where ? ' WHERE '.$where : '');
        $result = $this->execute($sql, $binds);

        return $result->rowCount();
    }

    /**
     * helper commands
     */
    public function readFirst($table, $where = '', $binds = [], $fields = '*')
    {
        $results = $this->read($table, $where, $binds, $fields, 1);
        if ($results) {
            return reset($results);
        } else {
            return null;
        }
    }

    public function readId($table, $id, $fields = '*')
    {
        return $this->readFirst($table, 'id = :id', ['id' => $id], $fields);
    }
}
