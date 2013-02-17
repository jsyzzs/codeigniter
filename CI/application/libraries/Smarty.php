﻿ <?php  if (!defined('BASEPATH')) exit('No direct script access allowed');



//require_once( BASEPATH.'libs/smarty/libs/Smarty.class.php' );

 require_once( APPPATH.'third_party/smarty/libs/Smarty.class.php' );

 

 class  CI_Smarty extends Smarty {

      function CI_Smarty()
      {
        parent::Smarty();

         $this->compile_dir = APPPATH . "views/templates_c";

         $this->template_dir = APPPATH . "views/templates";

         $this->assign( 'APPPATH', APPPATH );

         $this->assign( 'BASEPATH', BASEPATH );
		 
		 log_message('debug', "Smarty Class Initialized");

    }

  

    function __construct()

    {

        parent::__construct();

   

        $this->compile_dir = APPPATH . "views/templates_c";

           $this->template_dir = APPPATH . "views/templates";

          $this->assign( 'APPPATH', APPPATH );

          $this->assign( 'BASEPATH', BASEPATH );

    

          // Assign CodeIgniter object by reference to CI

          if ( method_exists( $this, 'assignByRef') )

          {

              $ci =& get_instance();

               $this->assignByRef("ci", $ci);

         }

  

           log_message('debug', "Smarty Class Initialized");

    }


       function view($template, $data = array(), $return = FALSE)

      {

       foreach ($data as $key => $val)

           {

               $this->assign($key, $val);

           }

           

          if ($return == FALSE)

          {

              $CI =& get_instance();

               if (method_exists( $CI->output, 'set_output' ))

              {

                $CI->output->set_output( $this->fetch($template) );

              }

               else

             {

                   $CI->output->final_output = $this->fetch($template);

             }

              return;

          }

           else

          {

               return $this->fetch($template);

           }

   }

  }