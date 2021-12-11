<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
      class A {
        public $name="BlazeIt";
        
        public function G1() {
          return "Hello, I'm student and my name is " .$this->name;
        }
      }
      class B extends A {
        public function G() {
          return "Hello, I'm teacher and my name is " .$this->name;
        }
      }
      class C extends B {
        public function G2() {
          return "Hello, I'm apache attack helicopter and my name is " .$this->name;
        }
      }
      class D extends C {
        public function G3() {
          return "Hello, I'm banana and my name is " .$this->name;
        }
      }
      $d1 = new D();
      echo $d1->G1()."<br>";
      echo $d1->G()."<br>";
      echo $d1->G2()."<br>";
      echo $d1->G3()."<br>";
    ?>
  </body>
</html>