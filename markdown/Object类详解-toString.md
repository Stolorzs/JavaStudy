[返回](面向对象编程.md)

|Object|详解|||
|:-:|:-:|:-:|:-:|
|[equals](Object类详解-equals.md)|[hashCode](Object类详解-hashcode.md)|[**toString**](Object类详解-toString.md)|[finalize](Object类详解-finalize.md)|
|[练习题](练习题-equals.md)|


# toString

1）toString方法用来返回该对象的字符串表示，**默认返回**：  
> `全类名(包名+类名) + @ + 哈希值的十六进制`

源码：
```java
//getClass().getName()返回全类名:包名+类名
//Inter.toHexString(hashCode())将对象hashCode值转成16进制字符串
public String toString() {
    return getClass().getNmae() 
    + "@" + Inter.toHexString(hashCode());
}
```
2）一般重写对象的toString方法，输出对象的属性

<details><summary>Monster</summary>

```java
package com.encap.tostring;

public class Monster {
    private String name;
    private String job;
    private double sal;

    public Monster(String name, String job, double sal) {
        this.name = name;
        this.job = job;
        this.sal = sal;
    }

    @Override
    public String toString() {//一般是把对象的属性输出来
        return "Monster{" +
                "name='" + name + '\'' +
                ", job='" + job + '\'' +
                ", sal=" + sal +
                '}';
    }
}
```
</details>



3）当直接输出一个对象时，toString方法会被默认调用

```java
//会默认调用monster.toString();
System.out.println(monster);
```