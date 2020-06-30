<?php


class demo
{
  function calculate()
  {
      if(isset($_POST['btn'])) {
          $fistValue = $_POST['first_number'];
          $secondValue = $_POST['second_number'];
          $choice = $_POST['check'];
          $res = "";
          if ($fistValue < $secondValue) {
              for ($i = $fistValue; $i<= $secondValue; $i++) {
                  if ($i % 2 != 0 && $choice == "odd") {
                      $res .= $i . "";
                  }

                  if ($i % 2 == 0 && $choice == "even") {
                      $res .= $i . "";
                  }
              }
              return $res;
          }
      }
  }
}