<?php
class User {

    // User properties
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $profile_picture;
    private $bio;
    private $created_at;
    private $updated_at;



    // Other methods to read, update, delete users go here...
    public function __construct()
    {
    }

    /**
     * @param $user_id
     * @param $username
     * @param $email
     * @param $password
     * @param $profile_picture
     * @param $bio
     * @param $created_at
     * @param $updated_at
     */


//    public function __construct($user_id, $username, $email, $password, $profile_picture, $bio, $created_at, $updated_at)
//    {
//        $this->user_id = $user_id;
//        $this->username = $username;
//        $this->email = $email;
//        $this->password = $password;
//        $this->profile_picture = $profile_picture;
//        $this->bio = $bio;
//        $this->created_at = $created_at;
//        $this->updated_at = $updated_at;
//    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profile_picture;
    }

    /**
     * @param mixed $profile_picture
     */
    public function setProfilePicture($profile_picture): void
    {
        $this->profile_picture = $profile_picture;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }


}
