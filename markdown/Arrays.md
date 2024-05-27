[返回](常用类.md)

# Arrays类方法

## toString返回数组的字符串形式
```java
//打印数组
Integer[] integers = {1, 2 , 3};
System.out.println(Arrays.toString(integers));
```
## sort排序(自然排序和定制排序)
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


