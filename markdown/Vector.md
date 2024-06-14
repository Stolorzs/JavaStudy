[返回目录](index.md)

|[集合](集合.md)|[**Collection**](Collection.md)|[Map](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|

- [Collection](Collection.md)
  - [List](List.md)
    - [ArrayList](ArraysList.md)
    - [**Vector**](Vector.md)
    - [LinkedList](LinkedList.md)
  - [Set](Set.md)
    - [HashSet](HashSet.md)
      - [LinkedHashSet](LinkedHashSet.md)


# Vector
- [Vector](#vector)
  - [介绍](#介绍)
  - [Vector和ArrayList比较](#vector和arraylist比较)
  - [Vector扩容算法](#vector扩容算法)

## 介绍
1）Vector类的定义
```java
public class Vector<E> 
extends AbstractList<E>
implements List<E>, RandomAccess, Cloneable, Serializable
{
}
```
2）Vecotr底层也是一个对象数组
```java
protected Object[] elementData;
```
3）Vector是线程同步的，即线程安全，Vector类的操作方法带有 synchronized
```java
public synchronized E get(int index) {
  if (index >= elementCount)
    throw new ArrayIndexOutOfBoundsException(index);
  return elementData(index);
}
```
4）在开发中，需要线程同步安全时，考虑使用Vector
## Vector和ArrayList比较
||底层结构|版本|线程安全or效率|扩容倍率|
|:-:|:-:|:-:|:-:|:-:|
|`ArrayList`|可变数组|jdk1.2|不安全，效率高|**无参0，第一次设为10，之后1.5倍**|
|`Vector`|可变数组|jdk1.0|安全，效率不高|**无参默认设为10，之后2倍**|
||
## Vector扩容算法
```java
//扩容算法
newCapacity = oldCapacity + ((capacityIncrement > 0) ? capacityIncrement : oldCapacity);
```
