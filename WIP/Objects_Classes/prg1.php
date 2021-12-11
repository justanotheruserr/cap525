<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
      class A {
        public $name="420BlazeIt";
        
        public function G1() {
          return "Hello, I'm a student and my name is " .$this->name;
        }
        
        public function G() {
          return "Hello, I'm a teacher and my name is " .$this->name;
        }
        
        public function G2() {
          $name="test";
          return "Hello, I'm a teacher and my name is " .$name;
        }
      }
      $d1 = new a();
      echo $d1->G1();
      echo "<br>";
      echo $d1->G();
      echo "<br>";
      echo $d1->G2();
    ?>
  </body>
</html>