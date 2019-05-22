<?php

class delete_Controller extends TinyMVC_Controller
{
  $db = new db ('localhost', 'root', '', 'klanten');
  $db->deleteDataById();
  }

}
