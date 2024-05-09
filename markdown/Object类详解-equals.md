<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

[返回](面向对象编程.md)

|Object|详解|||
|:-:|:-:|:-:|:-:|
|[**equals**](Object类详解-equals.md)|[hashCode](Object类详解-hashcode.md)|[toString](Object类详解-toString.md)|[finalize](Object类详解-finalize.md)|
|[练习题](练习题-equals.md)|



# equals方法

- [equals方法](#equals方法)
  - [equals和`==`的对比](#equals和的对比)
    - [`==`比较运算符](#比较运算符)
    - [equals方法](#equals方法-1)
  - [重写equals案例](#重写equals案例)
    - [1）判断两个Person对象的各个属性是否相等](#1判断两个person对象的各个属性是否相等)

## equals和`==`的对比

### `==`比较运算符
1）即可以判断**基本类型**，又可以判断**引用类型**   
2）如果判断基本类型，判断的是**值是否相等**   
3）如果判断引用类型，判断的是地址是否相等，即判断是不是**同一个对象**

```java
class Text {
    A a = new A();
    A b = a;
    A c = b;
    System.out.println(a == c);//返回true
    System.out.println(b == c);//返回true
    B obj = a;
    System.out.println(obj == c);//返回true
}
class A extends B {}
class B {}
```

### equals方法

1）equals 是**Object类**中的方法，只能判断**引用类型**  
2）默认判断的是地址是否相等，子类中往往重写该方法，用于判断内容是否相等

```java
Integer integer1 = new Integer(1000);
Integer integer2 = new Integer(1000);
inter1 == integer2 //false
inter1.equals(integer2) //true

String str1 = new String("x");
String str2 = new String("x");
str1 == str2 //false
str1.equals(str1) //true
```

## 重写equals案例

### 1）判断两个Person对象的各个属性是否相等
```java
class Person {
    private String name;
    private int age;
    private char gender;
}
```

<details><summary>Text</summary>

```java
package com.quals.exercise01;

public class Test {
    public static void main(String[] args) {
        Person person = new Person("小天", 18, '男');
        Person person2 = new Person("小天", 18, '男');
        System.out.println(person.equals(person2));
    }
}
```
</details>

<details><summary>Person</summary>

```java
package com.quals.exercise01;

public class Person {
    private String name;
    private int age;
    private char gender;

    public Person(String name, int age, char gender) {
        this.name = name;
        this.age = age;
        this.gender = gender;
    }
    // 重写Object类的方法，形参需要与其一致，同时会自动向上转型
    public boolean equals(Object anObject) {
        if (this == anObject) {
            return true;
        }
        if(anObject instanceof Person) {
            return ((Person) anObject).name.equals(this.name) &&
                    ((Person) anObject).age == this.age &&
                    ((Person) anObject).gender == this.gender;
        }
        return false;
    }
}
```
</details>