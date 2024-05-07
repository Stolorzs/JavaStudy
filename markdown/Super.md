[返回](面向对象编程.md)

# super

- [super](#super)
  - [介绍](#介绍)
  - [语法](#语法)
  - [案例](#案例)


## 介绍
super代表父类的引用，用于访问父类的属性、方法、构造器

## 语法
1）访问父类的属性，但不能访问父类的private属性
```java
super.属性名;
```
2）访问父类的方法，不能访问父类的private方法
```java
super.方法名(参数列表);
```
3）访问父类的构造器
- [继承](继承.md#使用细节)
```java
super(参数列表);
//只能放在构造器的第一句，只能出现一句！
```

```java
public class A {
    public int n1 = 100;
    protected int n2 = 200;
    int n3 = 300;
    private int n4 = 400;
    //==============
    public void test100() { }
    protected void test200() { }
    void test300() { }
    private void test400() { }
}

public class B extends A{
    public void hi() {
        System.out.println(super.n1);//n1,n2,n3可以访问，n4不可以
    }
    public void ok() {
        super.test100();//可以调100,200,300；400不行
    }
}
```
## 案例
