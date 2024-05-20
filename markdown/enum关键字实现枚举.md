
[返回目录](Home.md)



|[自定义类实现枚举](枚举和注解.md)|[**enum关键字实现枚举**](enum关键字实现枚举.md)|
|:-:|:-:|
|[JDK内置的基本注解类型](JDK内置基本注解.md)|[元注解](元注解.md)|

# enum关键字

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