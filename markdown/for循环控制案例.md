---
 
---
[返回](循环控制(for, while, do while, 多重循环).md)
- **多次打印**
```java
for(int i = 1; i <= 10; i++){
	System.out.println("Hello world" + i); //打印10句
}
```
- **变量写在循环外**
```java
int i = 1;
for(; i <= 10 ;){
	System.out.println("hello,韩顺平教育" + i);
	i++;
}
System.out.println("i=" + i); //i=11
```
- **特殊写法**
```java
for(;;){ //表示一个无限循环，死循环可以和break结合使用
	System.out.println("ok~");
}
```
- **多个变量初始化和多个变量迭代**
```java
int count = 3;
for(int i = 0 , j = 0 ; i < count ; i++ , j += 2){
	System.out.println("i=" + i + "j=" + j);
}
i=0 j=0
i=1 j=2
i=2 j=4
```