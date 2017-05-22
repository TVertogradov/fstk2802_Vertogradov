<?php

class People {
    private $name;
    private $height;
    private $mass;
    private $hair_color;
    private $skin_color;
    private $eye_color;
    private $birth_year;
    private $gender;
    private $homeworld;
    private $films;
    private $species;
    private $vehicles;
    private $starships;
    private $created;
    private $edited;
    private $url;

    public function getName() {
        return $this->name;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getMass() {
        return $this->mass;
    }

    public function getHair_color() {
        return $this->hair_color;
    }

    public function getSkin_color() {
        return $this->skin_color;
    }

    public function getEye_color() {
        return $this->eye_color;
    }

    public function getBirth_year() {
        return $this->birth_year;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getHomeworld() {
        return $this->homeworld;
    }

    public function getFilms() {
        return $this->films;
    }

    public function getStarships() {
        return $this->starships;
    }

    public function getVehicles() {
        return $this->vehicles;
    }

    public function getVehicle() {
        return $this->vehicles;
    }

    public function getCreated() {
        return $this->created;
    }

    public function getEdited() {
        return $this->edited;
    }

    public function getUrl() {
        return $this->url;
    }
    ///////////////////////////////////////////////////////////
    /// //////////////////////////////////////////////////////

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function setMass($mass) {
        $this->mass = $mass;
        return $this;
    }

    public function setHair_color($hair_color) {
        $this->hair_color = $hair_color;
        return $this;
    }

    public function setSkin_color($skin_color) {
        $this->skin_color = $skin_color;
        return $this;
    }

    public function setEye_color($eye_color) {
        $this->eye_color = $eye_color;
        return $this;
    }

    public function setBirth_year($birth_year) {
        $this->birth_year = $birth_year;
        return $this;
    }

    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    public function setHomeworld($homeworld) {
        $this->homeworld = $homeworld;
        return $this;
    }

    public function setFilms($films) {
        $this->films = $films;
        return $this;
    }

    public function setStarships($starships) {
        $this->starships = $starships;
        return $this;
    }

    public function setVehicles($vehicles) {
        $this->vehicles = $vehicles;
        return $this;
    }

    public function setVehicle() {
        return $this->vehicles;
    }

    public function setCreated() {
        return $this->created;
    }

    public function setEdited() {
        return $this->edited;
    }

    public function setUrl() {
        return $this->url;
    }

}