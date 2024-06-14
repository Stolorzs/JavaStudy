[返回](常用类.md)

# BigInteger BigDecimal类

应用场景：  
1）`BigInteger`适合保存**比较大的整型**  
2）`BigDecimal`适合保存**精度更高的浮点型**(小数)

## `BigInteger`
```java
BigInterger bigInteger = new BigInteger("23999999999999999999999");
System.out.println(bigInteger);
//加减乘除，需使用对应的方法
bigInteger.add(10L);
```

## `BigDecimal`
```java
//当我们需要保存一个精度很高的数，可以使用该类
BigDecimal bigDecimal = new bigDecimal("1.99
99999999999999999999");
//运算也需使用对应的方法
System.out.println(bigDecimal.divide(10));
//除不尽时，可能抛出异常
//解决方案：
System.out.println(
    bigDecimal.divide(10,BigDecimal.ROUND_CEILING)
    );//结果会保留分子的精度

```
