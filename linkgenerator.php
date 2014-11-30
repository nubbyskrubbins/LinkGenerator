<?php # LinkGenerator.php - link generator for your web pages

class LinkGenerator {
    /**
     *
     * @var string $server_environment This variable is used to store the information about the current server environment
     */
    public $server_environment;
    /**
     * Constructs the $server_environment variable
     */
    public function __construct() {
        $this->server_environment = $_SERVER["HTTP_HOST"];
    }
    /**
     * Function to get the server environment variable (hopefully this is self explanatory)
     * @return string
     */
    public function GetServerEnvironment () {
        return $this->server_environment;
    }
    /**
     * This function 
     * @param string $address The relative address to be converted to an absolute address
     * @return string $address The converted address in absolute form
     */
    public function GenerateLink ($address) {
        // Look in the string for ../, and replace it with an empty string, assign the result to a variable
        $new_address = str_replace("../",
                    "", 
                    $address);
        // Prepare to generate the link, generate the link, and return the function
        global $link_generated;
        $link_generated = $this->server_environment . "/" . $new_address;
        return $link_generated;
        
    }
}

?>
