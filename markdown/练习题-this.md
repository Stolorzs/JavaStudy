<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

[返回](练习题.md)
# 练习题-this
![alt text](https://raw.githubusercontent.com/Stolorzs/Picgo/master/thisketanglianxi.png)

```java
public class TextPerson {
    public static void main(String[] args) {
        Person a = new Person ("小明", 12);
        Person b = new Person("小明", 12);
        System.out.println(a.compareTo(b));
        //a调用compareTo方法，a是当前对象，故其中this.name指的是a的属性
    }
}
class Person {
    String name;
    int age;
    public Person(String name, int age) {
        this.age = age;
        this.name = name;
    }
    public boolean compareTo(Person p) {
        return this.name == p.name && this.name.equals(p.name);
    }
}

```