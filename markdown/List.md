[返回目录](index.md)

|[集合](集合.md)|[**Collection**](Collection.md)|[Map](Map.md)|[Collections](Collections.md)|
|:-:|:-:|:-:|:-:|

- [Collection](Collection.md)
  - [**List**](List.md)
    - [ArrayList](ArraysList.md)
    - [Vector](Vector.md)
    - [LinkedList](LinkedList.md)
  - [Set](Set.md)
    - [HashSet](HashSet.md)
      - [LinkedHashSet](LinkedHashSet.md)

# List接口
- [List接口](#list接口)
  - [介绍](#介绍)
  - [List接口常用方法](#list接口常用方法)
  - [List遍历](#list遍历)
  - [List冒泡排序](#list冒泡排序)

## 介绍
List接口是 Collection 接口的子接口   
1）List集合类中**元素有序**(即添加顺序和取出顺序一致)、且**可重复**  
```java
List list = new ArrayList();
list.add("jack");
list.add("tom");
list.add("mary");
list.add("hsp");
System.out.println("list=" + list);
//取出顺序一致，且可重复
```
2）List集合类中的每个元素都有其对应的顺序索引，即**支持索引**  
```java
list.get(3);//索引从0开始，取出了"hsp"
```
3）List容器中的元素都**对应**一个**整数型的序号**，记载其在容器中的**位置**，可以根据序号存取容器中的元素  
4）JDK API 中List的实现类有很多，常用的有`ArrayList` `LinkedList` 和`Vetor`
## List接口常用方法
```java
public class ListMethod {
  public static void main(String[] args) {
    List list = new ArrayList();
    list.add("张三丰");
    list.add("贾宝玉");

    // add 在index位置插入ele元素
    void add(int index, Object ele);
    list.add(1, "hsp");

    // addAll 从index位置开始将eles中的所有元素添加进来  
    boolean addAll(int index, Collection eles);

    // get 获取指定index位置的元素
    Object get(int index);

    // indexOf 返回obj在集合中首次出现的位置
    int indexOf(Object obj);

    // lastIndexOf 返回obj在当前集合中末次出现的位置
    int lastIndexOf(Object obj);

    // remove 移除指定index位置的元素，并返回此元素
    Object remove(int index);
    
    // set 设置指定index位置的元素为ele，相当于替换
    Object set(int index, Object ele)

    // subList 返回从fromIndex到toIndex位置的子集合
    List subList(int fromIndex, int toIndex);
    // 返回的范围 ：fromIndex <= subList < toIndex
  }
}
```
## List遍历
1）使用iterator
```java
Iterator iter = col.iterator();
while(iter.hasNext()) {
  Object o = iter.next();
}
```
2）使用增强for
```java
for(Object o : col) {
}
```
3）使用普通for
```java
for(int i = 0, i < list.size(); i++) {
  Object object = list.get(i);
  System.out.println(objcet);
}
```
## List冒泡排序

```java
public class Test {
    public static void main(String[] args) {
        List list = new ArrayList();
        list.add(new Book("红楼梦", "曹雪芹", 100));
        list.add(new Book("西游记", "吴承恩", 10));
        list.add(new Book("水浒传", "施耐庵", 19));
        list.add(new Book("三国", "罗贯中", 80));

        for (int i = 0; i < list.size() - 1 ; i++) {
            for (int j = 0; j < list.size() - i - 1; j++) {
                Book left = (Book)list.get(j);
                Book right = (Book)list.get(j + 1);
                if(left.getPrice() > right.getPrice()) {
                    list.set(j, right);
                    list.set(j + 1, left);
                }
            }
        }
        for (Object obj : list) {
            System.out.println(obj);
        }
    }
}

```