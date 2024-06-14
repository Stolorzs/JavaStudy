[返回](常用类.md)

# Arrays类方法
- [Arrays类方法](#arrays类方法)
  - [`toString`返回数组的字符串形式](#tostring返回数组的字符串形式)
  - [`sort`排序(自然排序和定制排序)](#sort排序自然排序和定制排序)
  - [`binarySearch`通过二分搜索法进行查找，要求必须排好序](#binarysearch通过二分搜索法进行查找要求必须排好序)
  - [`copyOf`数组元素的复制](#copyof数组元素的复制)
  - [`fill`数组填充](#fill数组填充)
  - [`equals`比较两个数组的结果是否完全一致](#equals比较两个数组的结果是否完全一致)
  - [`asList`将一组值转换成`list`](#aslist将一组值转换成list)

## `toString`返回数组的字符串形式
```java
//打印数组
Integer[] integers = {1, 2 , 3};
System.out.println(Arrays.toString(integers));
```
## `sort`排序(自然排序和定制排序)
```java
Integer[] arr = {1, -2 , 3, 4, 5,7, 0, 9};
//====自然排序====
Arrays.sort(arr); 
//因为数组是引用类型，所以通过sort排序后，会直接影响到实参 arr
//排序后
System.out.println(Arrays.toString(arr));
//sort重载的，也可以通过传入一个接口 Comparator 实现定制排序

//====定制排序====
//传入两个参数，一个数组，一个实现了Comparator接口的匿名内部
//要求实现 compare方法
//体现了接口编程的方法
Arrays.sort(arr, new Comparator() {
    @Override
    public int compare(Object o1, Object o2) {
        Integer i1 = (Integer) o1;
        Integer i2 = (Integer) o2;
        return i1 - i2;//返回大于0还是小于0会影响排序
    }
});
//体现 接口编程+动态绑定+匿名内部类的综合使用
```
[泛型空降回来](https://www.bilibili.com/video/BV1fh411y7R8?t=587.7&p=482)
## `binarySearch`通过二分搜索法进行查找，要求必须排好序

```java
Integer[] arr = {1,4,5,6,7,10};
//使用binraySearch二叉查找
//要求该数组是有序的，如果该数组是无序的，不能使用binarySearch
int index = Arrays.binarySearch(arr, 1);//返回0
int index = Arrays.binarySearch(arr, 2);
//如果数组中不存在该元素，则返回-(low + 1)
//low为本来应该存在的位置
int index = Arrays.binarySearch(arr, 11);//返回-7
```

## `copyOf`数组元素的复制
```java
integer[] newArr = Arrays.copyOf(arr, arr.length);
//从arr数组中拷贝，arr.length个元素，到newArr数组中
//arr.length - 1 少拷贝了一个
//arr.length + 1 在新数组中加了一个null
//arr.lenght < 0 抛出异常NegativeArraySizeException 
//该方法的底层使用了System.arraycopy();
```
## `fill`数组填充
```java
Integer[] num = new Integer[]{9, 3, 2};
Array.fill(num, 99);
//使用99去替换原来的元素
//填充后
System.out.println(num.toString());
//[99, 99, 99]
```
## `equals`比较两个数组的结果是否完全一致
完全一样返回true，不是完全一样返回false


## `asList`将一组值转换成`list`
```java
List asList = Arrays.asList{2,3,4,5,6,1};
System.out.println("asList=" + asList);
System.out.println("asList的运行类型是" + asList.getClass());
//arrList的运行类型是 class java.util.Array$ArrayList (一个静态内部类)
```