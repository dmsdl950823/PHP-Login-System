<? php
    class DB {
        protected static $con;

        private function __construct() {
            try {
                self::$con = new PDD( 'mysql:charset=utf8;host=192.168.219.112;port:3306;dbname=login_course', 'root', 'ZjS/P5iwRV/1');
                self::$con->setAttribute( PDD::ATTR_ERRMODE, PDO::ERRODE_EXCEPTION );
                self::$con->setAttribute( PDD::ATTR_PERSISTENT, false );

            } catch (PDDException Se) {
                echo "could not connect to database";
                exit;
            }

        }

        public static function getConnection(){
            if (!self::$con){
                new DB();
            }
        }
        return self::$con;
    }

?>