<?php
    class User{
        public $username;
        public $name;
        public $lastname;
        private $password;
        public $email;
        public $address_id;
        public $type;
        public $deleted_at;
        public $created_at;
        public $updated_at;

        function __construct(){}

        function User($username, $name, $lastname, $password, $email, $address_id, $type, $deleted_at, $created_at, $updated_at){
            $this->username     = $username;
            $this->name         = $name;
            $this->lastname     = $lastname;
            $this->password     = $password;
            $this->email        = $email;
            $this->address_id   = $address_id;
            $this->type         = $type;
            $this->deleted_at   = $deleted_at;
            $this->created_at   = $created_at;
            $this->updated_at   = $updated_at;
        }

        public function set_username($username){ $this->username = $username;  }
        public function get_username(){  return $this->username;  }

        public function set_name($name){ $this->name = $name;  }
        public function get_name(){  return $this->name;  }

        public function set_lastname($lastname){ $this->lastname = $lastname;  }
        public function get_lastname(){  return $this->lastname;  }

        public function set_password($password){ $this->password = $password;  }
        public function get_password(){  return $this->password;  }

        public function set_email($email){ $this->email = $email;  }
        public function get_email(){  return $this->email;  }

        public function set_address_id($address_id){ $this->address_id = $address_id;  }
        public function get_address_id(){  return $this->address_id;  }
        
        public function set_type($type){ $this->type = $type;  }
        public function get_type(){  return $this->type;  }

        public function set_deleted_at($deleted_at){ $this->deleted_at = $deleted_at;  }
        public function get_deleted_at(){  return $this->deleted_at;  }

        public function set_created_at($created_at){ $this->created_at = $created_at;  }
        public function get_created_at(){  return $this->created_at;  }

        public function set_updated_at($updated_at){ $this->updated_at = $updated_at;  }
        public function get_updated_at(){  return $this->updated_at;  }
        
    }
?>