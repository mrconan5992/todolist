function proLEAD() {
   switch(document.menu.submit.value)
   {
      case "List":   url="http://localhost/php/todolist-LTS/todo.php";
                     break;
      case "Append": url="http://localhost/php/todolist-LTS/todoappend.php";
                     break;
      case "Edit":   url="http://localhost/php/todolist-LTS/todoedit.php";
                     break;
      case "Delete": url="http://localhost/php/todolist-LTS/tododelete.php";
                     break;
   }
   document.menu.action=url;
   document.menu.submit();
}
