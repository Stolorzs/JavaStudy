[返回目录](index.md)

|[集合](集合.md)|[**Collection**](Collection.md)|[Map](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|

- [Collection](Collection.md)
  - [List](List.md)
    - [ArrayList](ArraysList.md)
    - [Vector](Vector.md)
    - [LinkedList](LinkedList.md)
  - [Set](Set.md)
    - [HashSet](HashSet.md)
      - [**LinkedHashSet**](LinkedHashSet.md)
  
# LinkedHashSet
- [LinkedHashSet](#linkedhashset)
  - [继承关系](#继承关系)
  - [介绍](#介绍)
  - [源码介绍](#源码介绍)
  - [equals和hashCode重写](#equals和hashcode重写)


## 继承关系
<img src="https://stolorzs.github.io/Picgo/drawio/ListMind.svg">

## 介绍
1） LinkedHashSet是HashSet的子类  
2） LinkedHashSet底层是一个 `LinkedHashMap`，底层维护了一个数组 + 双向链表  
3） LinkedHashSet根据元素的hashCode值来决定元素的存储位置，同时使用链表维护元素的**次序**，这使得元素看起来是以插入顺序保存的  
4） LinkedHashSet不允许添加重复元素

<img src="https://stolorzs.github.io/Picgo/drawio/LinkedHashSetTable.svg">

## 源码介绍  
[空降](https://www.bilibili.com/video/BV1fh411y7R8?t=1543.9&p=529)
1. 在LinkedHashSet中维护了一个hash表和双向链表(LinkedHashSet有**head**和**tail**)
2. 每一个节点有before和after属性，这样可以形成双向链表
3. 在添加一个元素时，先求hash值，在求索引时，确定该元素在`table`的位置，然后将添加的元素加入到双向链表(如果已经存在，不添加，原则和HashSet一样)  
```java
tail.next = newElement;
newElement.pre = tail;
tail = newElement;
```
4. LinkendHashSet能确保插入顺序和遍历顺序一致

5. LinkendHashSet中的节点存放
```java
//LinkedHashMap底层节点用静态内部类Entry存放
//Entry继承了HashMap中的Node静态内部类
//HashMap中的table可存放Entry——多态数组
static class Entry<K,V> extends HashMap.Node<K,V> {
    Entry<K,V> before, after;
    Entry(int hash, K key, V value, Node<K,V> next) {
        super(hash, key, value, next);
    }
}
```

## equals和hashCode重写
```java
@Override
public boolean equals(Object o) {
    if (this == o) return true;
    if (o == null || getClass() != o.getClass()) return false;
    Car car = (Car)o;
    return Double.compare(car.price, price) == 0 && Objects.equals(name, car.name);
}

@Override
public int hashCode() {
    return Objects.hash(name, price);
}
```