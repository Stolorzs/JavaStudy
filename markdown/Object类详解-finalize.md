[返回](面向对象编程.md)

|Object|详解|||
|:-:|:-:|:-:|:-:|
|[equals](Object类详解-equals.md)|[hashCode](Object类详解-hashcode.md)|[toString](Object类详解-toString.md)|[**finalize**](Object类详解-finalize.md)|
|[练习题](练习题-equals.md)|


# finalize
~~**java9中已被弃用**~~

当垃圾回收器确定不存在对该对象的更多引用时，由对象的垃圾回收器调用该方法

1）当对象被回收时，系统自动调用该对象的**finalize**方法。子类可以重写该方法，做一些释放资源的操作

2）**什么时候被回收**：当某个对象没有任何引用时，则**jvm**就认为这个对象是一个垃圾对象，就会使用垃圾回收机制来销毁该对象，在销毁该对象前，会先调用**finalize**方法

3）垃圾回收机制的调用，是由系统决定的，也可以通过`System.gc()`主动触发垃圾回收机制

<details><summary>Text</summary>

```java
package com.finalize;

public class Test {
    public static void main(String[] args) {
        Car bmw = new Car("宝马");
        bmw = null;//这时Car()变成垃圾，垃圾回收机会销毁对象
        //在销毁对象前，会调用该对象的finalize方法
        //程序员就可以在这个方法中写入自己的业务逻辑
        //  比如释放资源：数据库连接，或者打开文件...
        //如果程序员不重写finalize，就会调用Object类中的finalize，默认处理
        System.gc();//主动调用垃圾回收机
        System.out.println("程序退出了");
    }
}
```
</details>


<details><summary>Car</summary>

```java
package com.finalize;

public class Car {
    private String name;

    public Car(String name) {
        this.name = name;
    }

    @Override
    protected void finalize() throws Throwable {
        System.out.println("释放了资源");
    }
}
```
</details>

4）**在实际开发中，几乎不会运用，更多会为了应付面试**