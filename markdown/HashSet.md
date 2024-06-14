[返回目录](index.md)

|[集合](集合.md)|[**Collection**](Collection.md)|[Map](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|

- [Collection](Collection.md)
  - [List](List.md)
    - [ArrayList](ArraysList.md)
    - [Vector](Vector.md)
    - [LinkedList](LinkedList.md)
  - [Set](Set.md)
    - [**HashSet**](HashSet.md)
      - [LinkedHashSet](LinkedHashSet.md)
# HashSet
- [HashSet](#hashset)
  - [HashSet介绍](#hashset介绍)
  - [HashSet底层](#hashset底层)
    - [扩容机制](#扩容机制)
  - [案例](#案例)

## HashSet介绍
[空降](https://www.bilibili.com/video/BV1fh411y7R8?t=617.2&p=519)——难点 #⭐

1）HashSet实现了`Set接口`   
2）HashSet实际上是`HashMap`
```java
public HashSet() {
  map = new HashMap<>();
}
```
3）可以存放`null`值，但只能有一个`null`（元素不能重复）  
4）HashSet**不保证元素是有序的**，取决于hash后，再确定索引的结果   
5）**不能有重复的元素**(对象)

##  HashSet底层

[空降](https://www.bilibili.com/video/BV1fh411y7R8?t=22.8&p=523)
```java
Set set = HashSet();
set.add("lucy");//ok
set.add("lucy");//无法添加
set.add(new Dog("tom"));//ok
set.add(new Dog("tom"));//ok

set.add(new String("hsp"));//ok
set.add(new String("hsp"));//无法添加
```
HashSet底层是HashMap, HashMap底层是(数组 + 链表 + 红黑树)
<img src="https://stolorzs.github.io/Picgo/drawio/HashSetSrcTable.svg">

1）HashSet的底层是HashMap  
2）添加一个元素时，先得到的是**hash值**，然后会转成**索引值**  
3）找到**存储数据表table**，看这个值是否已经存放有元素  
4）如果没有，直接加入  
5）如果有，调用equals比较，如果相同，就放弃添加，如果不相同，则添加到最后  
6）在java8中，如果一条链表的元素个数**到达**`TREEIFY_THRESHOLD`(默认是8)，并且table的大小 >= `MIN_TREEIFY_CAPACITY`(默认为64)，就会进行树化(**红黑树**)

### 扩容机制
1）HashSet层是HashMap
第一次添加时，table 数组扩容到16，
$$
\begin{array}{c c c c}
临界值& = & 16 &\times & 加载因子\\
threshold & &&&loadFactor\\
\\
12&=&16 &\times&0.75
\end{array}
$$

2）如果`table数组`使用到了临界值12，就会扩容到 $16\times2=32$，新的临界值就是$32\times0.75=24$，**依此类推**  
3）在Java8中，如果一条链表的元素个数到达 `TREEIFY_THRESHOLD(默认是8)`，并且table的大小`table.size()`$\geqslant$
`MIN_TREEIFY_CAPACITY(默认64)`,会进行树化(**红黑树**)，否则仍然采用**数组扩容机制**




<img src="https://stolorzs.github.io/Picgo/drawio/HashSetSrc.svg">


<details><summary>树化测试代码</summary>

```java
public class Test {
  public static void main(String[] args) {
    HashSet hashSet = new HashSet();
    for (i = 1; i <= 12; i++ ) {
      hashSet.add(new A(i));
    }
  }
}
class A {
  private int n;
  public A(int n) {
    this.n = n;
  }
  @Override
  public int hashCode() {
    return 100;
  }
}
```

</details>

## 案例
> 如何让自定义类能够被HashSet视为同一个元素  
> 需要重写`equals`和`hashCode`
```java
package com.excercise.hashset;

import java.util.HashSet;
import java.util.Objects;

public class HashSetPractice {
    public static void main(String[] args) {
        HashSet hashSet = new HashSet();
        hashSet.add(new Employee("小天",10));
        hashSet.add(new Employee("小地",100));
        hashSet.add(new Employee("小天",10));
        System.out.println(hashSet);
    }
}
class Employee {
    private String name;
    private int age;
    public Employee(String name, int age) {
        this.name = name;
        this.age = age;
    }
    //====重写equals====
    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Employee employee = (Employee) o;
        return age == employee.age && Objects.equals(name, employee.name);
    }
    //====重写hashCode====
    @Override
    public int hashCode() {
        return Objects.hash(name, age);
    }//取决于两个值
    @Override
    public String toString() {
        return "Employee{" +
                "name='" + name + '\'' +
                ", age=" + age +
                '}';
    }
}
```