---
 
---
[返回](变量.md)  

#### 基本数据类型——»字符串(String)
- 语法：基本数据类型+`""`即可
```java
int n1 = 100;
float f1 = 1.1F;
double di = 4.5;
boolean b1 = true;
String s1 = n1 + ""; \\s1 就是字符串
String s1 = f1 + "";
String s1 = di + "";
String s1 = b1 + "";
System.out.printfl(s1 + "" + s1 + "" + s3 + "" + s4);
```
---
#### 字符串(String)——»基本数据类型
- 语法：通过基本数据类型的**包装类**调用`parseXX`方法即可
```java
String s5 = "123";
//见面向对象和方法内容
//使用 基本数据类型对应的包装类 的相应方法，得到基本数据类型
int num1 = Integer.parseInt(s5);  // Integer.parseInt：将字符串转换为10进制数
Double num2 = Double.parseDouble(s5);
float num3 = Float.parseFloat(s5);
Long num4 = Long.parseLong(s5);
byte num5 = Byte.parseByte(s5);
Boolean b = Boolean.parseBoolean("true");
short = num6 = Short.parseShort(s5); 
//区别
System.out.println(num1 + 1); //输出124
System.out.println(s5 + 1); //输出1231
```
- --
#### 字符串——»字符
- 在计算机中的含义：取第一个字符
```java
String s5 = "123";
//s5.charAt(0)  得到s5字符串的第一个字符
System.out.println(s5.charAt(0));
```
---
#### 注意事项
- 1、在将`String`类型转成基本数据类型时，要确保`String`类型能够转成有效的数据
	- 如`"123"`可以转成一个整数，但`"hello"`不行 
- 2、如果格式不正确，编译没问题，但运行会抛出异常，程序会终止，见[异常](异常.md) 