---
 
---
[返回](练习题.md)

![[练习题-switch分支控制-1.png]]
```java
import java.util.Scanner;
public class SwitchExercise01{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入一个小写字母(a-e)");
		char c1 = myScanner.next().charAt(0);
		switch(c1){
			case 'a' :
				System.out.println("A");
				break;
			case 'b' :
				System.out.println("B");
				break;
			case 'c' :
				System.out.println("C");
				break;
			case 'd' :
				System.out.println("D");
				break;
			case 'e' :
				System.out.println("E");
				break;
			default :
				System.out.println("other");
				break;
		}
	}
}
```
![[练习题-switch分支控制-2.png]]

```java
import java.util.Scanner;
public class SwitchExercise02{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入学生成绩");
		double grade = myScanner.nextDouble();
		if(grade >= 0 && grade <= 100){
			switch((int)(grade / 60)){
				case 0 :
					System.out.println("不合格");
					break;
				case 1 :
					System.out.println("合格");
					break;
			}
		}else{
			System.out.println("你输入的成绩有问题");
		}
	}
}
```
```java
import java.util.Scanner;
public class SwitchExercise02{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入学生成绩");
		double grade = myScanner.nextDouble();
		if(grade >= 0 && grade <= 100){
			switch(grade >= 60 ? 1 : 0){
				case 0 :
					System.out.println("不合格");
					break;
				case 1 :
					System.out.println("合格");
					break;
			}
		}else{
			System.out.println("你输入的成绩有问题");
		}
	}
}
```
![[练习题-switch分支控制-3.png]]
```java
import java.util.Scanner;
public class SwitchExercise03{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入月份(1-12)");
		int mon = myScanner.nextInt();
		switch(mon){
			case 3 :
			case 4 :
			case 5 :
				System.out.println("春季");
				break;
			case 6 :
			case 7 :
			case 8 :
				System.out.println("夏季");
				break;
			case 9 :
			case 10 :
			case 11 :
				System.out.println("秋季");
				break;
			case 12 :
			case 1 :
			case 2 :
				System.out.println("冬季");
				break;
			default :
				System.out.println("月份输入错误");
				break;
		}
	}
}
```