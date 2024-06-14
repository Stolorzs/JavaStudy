[返回目录](index.md)

|[集合](集合.md)|[**Collection**](Collection.md)|[Map](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|

- [Collection](Collection.md)
  - [List](List.md)
    - [ArrayList](ArraysList.md)
    - [Vector](Vector.md)
    - [LinkedList](LinkedList.md)
  - [**Set**](Set.md)
    - [HashSet](HashSet.md)
      - [LinkedHashSet](LinkedHashSet.md)
# Set接口
- [Set接口](#set接口)
  - [继承关系](#继承关系)
  - [Set介绍](#set介绍)
  - [Set接口常用方法](#set接口常用方法)
  - [Set接口的遍历方式](#set接口的遍历方式)

## 继承关系
<img src="https://stolorzs.github.io/Picgo/drawio/ListMind.svg">

## Set介绍
1）**无序**(添加和取出的顺序不一样，取出顺序是固定的)，**没有索引**   
2）不允许重复元素，最多包含一个`null`  
3）JDK API 中的Set接口实现类有：`HashSet`, `TreeSet` 等

## Set接口常用方法

- 常用方法与Collection接口一样
```java
public class Method {
  public static void main(String[] args) {
    Set set = new HashSet();
    set.add("john");
    set.add("lucy");
    set.add("john");
    set.add(null);
    set.add(null);
    System.out.println("set=" +　set);
    //set=[null, john, lucy, jack]
  }
}
```
## Set接口的遍历方式
同Collection的遍历方式一样
- 可以使用**迭代器**

```java
Iterator iterator = set.iterator(); 
while(iterator.hasNext()) {
  Object obj = iterator.next();
  System.out.println("obj=" + obj);
}
```

- 可以使用**增强for**

```java
for(Object o : set) {
  System.out.println("o=" + o);
}
```
- **不能使用**索引的方式来获取