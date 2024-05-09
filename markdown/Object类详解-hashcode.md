[返回](面向对象编程.md)

|Object|详解|||
|:-:|:-:|:-:|:-:|
|[equals](Object类详解-equals.md)|[**hashCode**](Object类详解-hashcode.md)|[toString](Object类详解-toString.md)|[finalize](Object类详解-finalize.md)|
|[练习题](练习题-equals.md)|

# hashCode


返回该对象的哈希码值。支持此方法是为了提高哈希表的性能：

1）提高具有哈希结构的容器的效率  
2）两个引用，如果指向的是同一个对象，则哈希值肯定是一样的  
3）两个引用，如果指向的是不同对象，则哈希值肯定是不一样的  
4）哈希值主要是根据地址号来的，不能完全将哈希值等价于地址  
5）案例  

```java
public class Text {
    public static void main(String[] args) {
        AA aa = new AA();
        AA aa2 = new AA();
        //两个hashCode不同
        aa.hashCode;
        aa2.hashCode;
        AA aa3 = aa;
        aa3.hashCode == aa.hashCode;
    }
}
class AA {}
```


6）在集合中，hashCode如果需要的话，也会重写
