---
 
---
[返回](练习题.md)

![[练习题-while循环控制-1.png]]
```java
public class WhileExercise01{
	public static void main(String[] args){
		int i = 1;
		while(i <= 100){
			if(i % 3 == 0){
				System.out.println("i=" + i);
			}
			i++;
		}
	}
}
```
![[练习题-while循环控制-2.png]]
```java
public class WhileExercise02{
	public static void main(String[] args){
		int i = 40;
		while(i <= 200){
			if(i % 2 == 0){
				System.out.println("i=" + i);
			}
			i++;
		}
	}
}
```