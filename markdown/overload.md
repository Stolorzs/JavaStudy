<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

[返回](面向对象编程.md)

[override](override.md)
# overload

- [overload](#overload)
  - [介绍](#介绍)
  - [注意事项](#注意事项)
  - [案例入门](#案例入门)


## 介绍
- 方法重载(overlord)：java中允许同一个类中，多个同名方法的存在，但要求形参列表不一致
- 比如：`System.out.println();`out就是PrintStream类型
- 重载的好处 ：
  - 1、减轻起名的麻烦
  - 2、减轻几名的麻烦

## 注意事项
- 1、方法名：必须相同
- 2、形参列表：必须不同(形参类型、个数、顺序，至少有一个不同，参数名无要求)
- 3、返回类型：无要求

## 案例入门

`OverLoad01.java`  
- 编写类：MyCalculator 方法：
calculate，计算和
- calculate(int n1, int n2)
- calculate(int n1, double n2)
- calculate(double n2, int n1)
- calculate(int n1, int n2, int n3)

```java
class MyCalculator {
    //下面四个方法构成重载
    public int calculate(int n1, int n2) {
        return n1 + n2;
    }
    public double calculate(int n1, double n2) {
        return n1 + n2;
    }
    public double calculate(double n2, int n1) {
        return n1 + n2;
    }
    public double calculate(int n1, int n2, int n3) {
        return n1 + n2 + n3;
    }
}
```

