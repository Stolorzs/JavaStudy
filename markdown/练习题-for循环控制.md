---
 
---
[返回](练习题.md)

![[练习题-for循环控制-1.png]]
**第一题**——化繁为简，先死后活
	化繁为简：复杂的需求拆解成简单的需求
	先死后活：先考虑固定的值，然后转成灵活变化的值
```java
public class ForExercise01{
	public static void main(String[] args){
		int n = 0;//个数初始化
		int sum = 0;//总和
		for(int i = 1; i <= 100; i++){
			if(i % 9 == 0){
				n++;//个数累计
				System.out.println("第" + n + "个为" + i);
				sum += i;//和累计
			}
		}
		System.out.println("1-100之间9的倍数的个数为" + j);
		System.out.println("1-100之间9的倍数的总和为" + sum);
	}
}
```
为了使用更好的需求，起始范围设定为变量
```java
public class ForExercise01{
	public static void main(String[] args){
		int min = 1, max = 100, t = 9;
		int n = 0;//个数初始化
		int sum = 0;//总和
		for(int i = min; i <= max; i++){
			if(i % t == 0){
				n++;//个数累计
				System.out.println("第" + n + "个为" + i);
				sum += i;//和累计
			}
		}
		System.out.println("1-100之间9的倍数的个数为" + n);
		System.out.println("1-100之间9的倍数的总和为" + sum);
	}
}
```
**第二题**
```java
public class ForExercise02{
	public static void main(String[] args){
		for(int i = 0,j = 5; i <= 5; i++, j--){
			System.out.println(i + " + " + j + " = " + (i+j));
		}
	}
}
```