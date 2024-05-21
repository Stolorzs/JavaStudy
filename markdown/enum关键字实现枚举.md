
[返回目录](Home.md)



|[自定义类实现枚举](枚举和注解.md)|[**enum关键字实现枚举**](enum关键字实现枚举.md)|
|:-:|:-:|
|[JDK内置的基本注解类型](JDK内置基本注解.md)|[元注解](元注解.md)|

# enum关键字

- [enum关键字](#enum关键字)
  - [使用方法](#使用方法)
  - [使用细节](#使用细节)
  - [使用细节2](#使用细节2)
  - [Enum类相关方法](#enum类相关方法)


## 使用方法

```java
//1）使用enum替代class
enum Season {
    //2）SPRING是对象(常量)名，即 常量名(实参列表)
    //3）如果有多个对象，使用,相隔
    //4）如果使用enmu实现枚举，要求把常量名()写在最前面
    SPRING("春天","温暖"), SUMMER("夏天","炎热"), AUTUMN("秋天","凉爽"), WINTER("冬天","寒冷");
    private String name;
    private String desc;
    private Season(String name, String desc) {
        this.name = name;
        this.desc = desc;
    }
}
```

## 使用细节
1）使用enum关键字开发一个枚举类时，默认会继承enum类

2）传统的`public static final Season SPRING = new Season("春天", "温暖")`简化成`SPRING("春天", "温暖")` 

3）如果使用无参构造器，创建枚举对象，则实参列表和小括号都可以省略，如直接`What;`省略了`()`

4）当有多个枚举对象时，使用`,`间隔，最后有一个分号结尾

5）枚举对象必须放在枚举类的首行
## 使用细节2
1）使用enum关键字后，就不能再继承其他类了，因为**enum会隐式的继承Enum**，而Java是**单继承机制**  
2）枚举和普通类一样，可以**实现接口**
```java
enum 类名 implements 接口1,接口2 {
  
}
```



## Enum类相关方法

|方法名|方法描述|使用示例|
|:-|:-:|:-:|
|`valueOf`|将字符串转成枚举对象，要求必须是已有的常量名，否则报错|`Season autumn1 = Season.valueOf("AUTUMN")`|
|`toString`||
|`equals`||
|`hashCode`||
|`getDeclaringClass`||
|`name`|得到当前枚举常量的名字:`SPRING`|
|`ordinal`|输出该枚举对象的次序/编号，从0开始编号|
|`values`|返回枚举对象的数组`Season[]`，包括定义的所有枚举对象|`Season[] s = Season.values()`|
|`compareTo`|比较两个枚举常量，左边编号-右边编号|`Season2.AUTUMN.compareTo(Season2.SUMMER);`|
|`clone`||