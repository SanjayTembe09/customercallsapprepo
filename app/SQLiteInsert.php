<?php

namespace App;

/**
 * PHP SQLite Insert Demo
 */
class SQLiteInsert {

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * Initialize the object with a specified PDO object
     * @param \PDO $pdo
     */
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Insert a new project into the projects table
     * @param string $projectName
     * @return the id of the new project
     */
    /*public function insertProject($projectName) {
        $sql = 'INSERT INTO projects(project_name) VALUES(:project_name)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':project_name', $projectName);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    } */

    /**
     * Insert a new customer client into the client table
     * @param type $taskName
     * @param type $startDate
     * @param type $completedDate
     * @param type $completed
     * @param type $projectId
     * @return int id of the inserted task
     */
    public function insertClient($uuid, $clientName, $clientContactNo, $clientAddressLine1, $clientAddressLine2, $clientArea) {
        $sql = 'INSERT INTO client(clientId, clientName,clientContactNumber,clientAddressLine1,clientAddressLine2,clientArea) '
                . 'VALUES(:clientId,:clientName,:clientContactNo,:clientAddressLine1,:clientAddressLine2,:clientArea)';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':clientId' => $uuid,
            ':clientName' => $clientName,
            ':clientContactNo' => $clientContactNo,
            ':clientAddressLine1' => $clientAddressLine1,
            ':clientAddressLine2' => $clientAddressLine2,
            ':clientArea' => $clientArea,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function insertOwner($uuid, $ownerName, $ownerContactNo) {
        $sql = 'INSERT INTO owner(ownerId, ownerName,ownerContactNumber) '
                . 'VALUES(:ownerId,:ownerName,:ownerContactNo)';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':ownerId' => $uuid,
            ':ownerName' => $ownerName,
            ':ownerContactNo' => $ownerContactNo,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function insertRestaurant($ruuid, $restaurantName, $restaurantAddressLine1, $restaurantAddressLine2, $restaurantContactNo) {
        $sql = 'INSERT INTO restaurant(restaurantId, restaurantName,restaurantAddressLine1, restaurantAddressLine2, restaurantContactNumber) '
                . 'VALUES(:restaurantId,:restaurantName,:restaurantAddressLine1, :restaurantAddressLine2, :restaurantContactNo)';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':restaurantId' => $ruuid,
            ':restaurantName' => $restaurantName,
            ':restaurantAddressLine1' => $restaurantAddressLine1,
            ':restaurantAddressLine2' => $restaurantAddressLine2,
            ':restaurantContactNo' => $restaurantContactNo,
        ]);

        return $this->pdo->lastInsertId();
    }

}