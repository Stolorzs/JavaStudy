[返回目录](Home.md)

|[自定义类实现枚举](枚举和注解.md)|[enum关键字实现枚举](enum关键字实现枚举.md)|
|:-:|:-:|
|[**JDK内置的基本注解类型**](JDK内置基本注解.md)|[元注解(了解)](元注解.md)|

# 注解

- [注解](#注解)
  - [介绍](#介绍)
  - [使用须知](#使用须知)
  - [`@Override`](#override)
  - [`@Deprecated`](#deprecated)
  - [`@SuppressWarnings`](#suppresswarnings)


## 介绍
1）注解(Annotation)，也被称为元数据(Metadata)，用于修饰解释**包**、**类**、**方法**、**属性**、**构造器**、**局部变量**等数据信息  
2）和注解一样，**注解不影响程序逻辑**，**但注解可以被编译或运行**，相当于嵌入在代码中的补充信息  
3）在JavaSE中，注解的使用目的比较简单，比如标记过时的功能，忽略警告等。在JavaEE中，注解占用了更重要的角色，例如用来**配置应用程序的任何切面**，代替JavaEE旧版中所遗留的繁冗代码和XML配置等

## 使用须知
使用Annotation时，要在其前面加上@符号，并把该Annotation当成一个修饰符使用。用于修饰它支持的程序元素  
1）`@Override`：限定某个方法，是重写父类方法，该注解只能用于方法  
2）`@Deprecated`：用于表示某个程序元素(类，方法)已过时  
3）`@SuppressWarnings`：抑制编译器警告


## `@Override`

```java
class Father {
    public void fly() {
        System.out.println("Father fly");
    }
}
class Son extends Father {
    @Override
    public void fly() {
        System.out.println("Son fly");
    }
}
```
1）`@Override`放在`fly()`方法上，表示子类方法重写基类的方法  
2）如果没有`@Override`，`fly()`还是重写了基类方法  
3）如果写了`@Override`，编译器去**检查**是否真正重写了基类方法，如果**未重写，会编译错误**  
4）`@Override`只能修饰方法，**不能修饰**其他**类、包、属性**  
5）查看`@Override`源码为：`@Target(ElementType.METHOD)`，说明只能修饰方法  
6）`@Target`是修饰注解的注解，称为**元注解**

```java
//@Override的声明
public @interface Override {

}
``` 
## `@Deprecated`
1）`@Deprecated`修饰某个元素，表示该元素已经过时  
2）即不再推荐使用，但仍然可以使用  
3）可以修饰**方法，类，字段，包，参数等**  
4）源码
```java
@Documented
@Retention(RetentionPolicy RUNTIME)
@Target(value={CONSTRUCTOR, FIELD, LOCAL_VARIABLE, METHOD, PACKAGE, PARAMETER, TYPE})
public @interface Deprecated{

}
```

5）可以做版本升级过渡使用

## `@SuppressWarnings`

1）当不希望看到警告的时候，可以使用该注解来**抑制警告信息**  
2）`@SuppressWarnings({""})`，`{""}`中，可以写入希望不显示的警告信息，可以传入多个  
3）**可以使用的警告类型有**：  
...具体见文档  
4）`@SuppressWarnings`的作用范围，和放置位置相关

- [空降](https://www.bilibili.com/video/BV1fh411y7R8?t=673.9&p=435)