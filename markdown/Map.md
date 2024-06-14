[返回目录](index.md)

|[集合](集合.md)|[Collection](Collection.md)|[**Map**](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|


# Map
- [Map](#map)
  - [继承关系](#继承关系)
  - [Map接口实现类的特点(难点)](#map接口实现类的特点难点)
  - [Map接口的常用方法](#map接口的常用方法)
  - [Map接口的遍历](#map接口的遍历)

## 继承关系
<img src="https://stolorzs.github.io/Picgo/drawio/MapMind.svg">

## Map接口实现类的特点(难点)
1. Map用于保存具有映射关系的数据：`Key-Value`，双列元素
2. Map中的key和value 可以是任何引用类型的数据，会封装到`HashMap$Node`对象中
3. Map中的`key`**不允许重复**，**原因和HashSet一样**
```java
Map map = new HashMap();
map.put("no1","韩顺平");
map.put("no2","张无忌");
map.put("no1","张三丰");
System.out.println("map=" + map);
//替换机制
//{no2=张无忌, no1=张三丰}
```
4. Map中的`value`**可以重复**
```java
Map map = new HashMap();
map.put("no1","韩顺平");
map.put("no2","张三丰");
map.put("no3","张三丰");
//不冲突
```
5. Map的`key`可以为null，`value`也可以为null，注意：`key`为null，只能有一个；`value`为null，可以有多个
6. 常用**String类**作为Map的key
7. `key`和`value`之间存在单向一对一关系，即通过指定的`key`总能找到对应的`value`
```java
map.get("no2");//返回key为no2对应的value
```

8. **Map存放数据示意**：一对`K-V`存放在一个HashMap$Node中，Node实现了Map.Entry接口
```java
//HashMap$Node
static class Node<K,V> implements Map.Entry<K,V> {
    final int hash;
    final K key;
    V value;
    Node<K,V> next;

    Node(int hash, K key, V value, Node<K,V> next) {
        this.hash = hash;
        this.key = key;
        this.value = value;
        this.next = next;
    }
}
```
<img src="https://stolorzs.github.io/Picgo/drawio/MapInterface.svg">


```java
//EntrySet使用方法
public class Test {
    public static void main(String[] args) {
        Map map = new HashMap();
        map.put("no1","韩顺平");
        map.put("no2","张无忌");
        //调用map中的entrySet方法，返回一个装有所有K-V数据的集合
        //并用 Set接口来保存该集合
        Set set = map.entrySet();
        //使用增强for循环遍历K-V
        for (Object obj : set) {
            Map.Entry entry = (Map.Entry) obj;
            System.out.println(entry.getKey() + entry.getValue())
        }
        //KeySet和Values的使用方法与上面类似
    }
}
```

## Map接口的常用方法

- put：添加
- remove：根据键删除映射关系
- get：根据键获取值
- size：获取元素个数
- isEmpty：判断元素个数是否为0
- clear：清除
- containsKey：查找键是否存在

## Map接口的遍历