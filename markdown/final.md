<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

[返回](面向对象编程.md)

# final
- [final](#final)
  - [介绍](#介绍)
  - [使用细节](#使用细节)
  - [使用细节2](#使用细节2)


## 介绍
可以修饰类、属性、方法、局部变量

1）当**不希望类被继承**时，可以使用flinal修饰  
```java
final class A {}
class B extends A {}//不可继承
```
2）当不希望父类的**某个子方法**被[重写](override.md)，可以用final关键字修饰  


```java
class A {
    public final void hi() {}
}
class B extends A {
    public void hi() {}//不可重写
}
```

3）当不希望类的**某个属性**的值被修改，可以使用final修饰  


```java
class A {
    public final double TAX_RATE = 0.08;
}
class B {
    public static main(String[] args) {
        E e = new E();
        e.TAX_RATE = 0.09;//不可修改
    }
}
```

4）当不希望某个**局部变量**被修改，可以使用final修饰

```java
class A {
    public void cry() {//这时,NUM也称为局部常量
        final double NUM = 0;
    }
}
```

## 使用细节

1）final修饰的属性又叫常量，一般用**XX_XX_XX**，字母全大写  

2）final修饰的属性在定义时，**必须赋初值**，并且以后不能修改，赋值可以在以下位置之一  
**①定义时**  
**②在构造器中**  
**③在代码块中**  

3）如果final修饰的属性是**静态的**，则初始化的位置只能是  
**①定义时**  
**②静态代码块**  
**不能在构造器中赋值**  

4）final类不可以继承，但是可以实例化对象  

5）如果某类不是final类，但是含有**final方法**，则**该方法**虽然不能重写，但是可以被继承  

## 使用细节2

1）如果一个类已经是final类了，就没有必要再将方法修饰成final方法了  

2）final**不能修饰构造器**  

3）final和static往往搭配使用，效率更高，不会导致类的加载 

```java
public class AAA {
    public static void main(String[] args) {
//调用BBB.num(final属性)时，不会导致被BBB类被加载
        System.out.println(BBB.num);
    }
}
```
```java
class BBB {
    public final static int num =10000;
    static {
        System.out.println("BBB 静态代码块被执行");
    }
}
```

4）包装类(**Inter**，**Double**，**Float**，**Boolean等**)都是final，**String**也是final类，不能被继承

