<?php

class User extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connect();
    }

    public function index()
    {
        $stmt = $this->db->prepare('SELECT * FROM users ORDER BY name');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function show($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}