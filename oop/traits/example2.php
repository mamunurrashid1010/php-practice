<?php
/*
 * This is example of php traits.
 * Traits:
    PHP only supports single inheritance: a child class can inherit only from one single parent.
    So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
    Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
    Traits are declared with the trait keyword
 */

# trait
trait message{
    public function adminMessage(){
        echo "Admin Message:<br>Hello, i am from trait<br><br>";
    }

}

# trait
trait employee{
    public function softwareDeveloperList(){
        echo "Name of Developer:<br> 1.Kamal 2.Jamal 3.Noman<br>";
    }
}

#trait
trait notification{
    public function sentNotification(){
        echo "Notification send success.<br>";
    }
}

# trait
trait subscription{
    public function package(){
        return "Monthly/100 USD";
    }
    public function expirationDate(){
        return "2023-12-15";
    }
}

# class
class welcome{
    use message;
    use employee;
    use notification;
    use subscription;
    public function test(){
        $this->adminMessage();
    }
}

echo "<h3>Php trait practice</h3><br>";
# class object
$obj=new welcome();
# method-1
$obj->test();
# method-2
$obj->softwareDeveloperList();
$obj->sentNotification();

echo "<br>Subscription Details:";
echo "<br>Subscription Package: " .$obj->package();
echo "<br>Subscription Expiration Date: " .$obj->expirationDate();

