<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
      class A {
        public $name="Name";
        
        public function G1() {
          return "Hello, I'm student and my name is " .$this->name;
        }
      }
      class D extends A {
        public function G() {
          return "Hello, I'm teacher and my name is " .$this->name;
        }
      }
      $d1 = new D();
      echo $d1->G1()."<br>";
      echo $d1->G();
    ?>
  </body>
</html>