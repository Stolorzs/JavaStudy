---
 
---
[返回](练习题.md)
![[练习题_if分支控制_1.png]] 
- 韩顺平教育~
---
![[练习题_if分支控制_2.png]]
###### 1
```java
import java.util.Scanner;
public class IfExercise01{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入第一个变量");
		double a = myScanner.nextDouble();
		System.out.println("请输入第二个变量");
		double b = myScanner.nextDouble();
		if(a > 10.0 && b < 20.0){
			System.out.println(a + b);
		}	
	}
}
```
###### 2
```java
import java.util.Scanner;
public class IfExercise02{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入第一个变量");
		int a = myScanner.nextInt();
		System.out.println("请输入第二个变量");
		int b = myScanner.nextInt();
		int sum = a + b;
		if(sum % 3 == 0 && sum % 5 == 0){
			System.out.println("二者的和可以被3和5整数");	
		}
		else
			System.out.println("二者的和不可以被3和5整数");	
	}
}
```
###### 3
```java
import java.util.Scanner;
public class IfExercise03{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入一个年份");
		int year = myScanner.nextInt();
		boolean con1 = year % 4 == 0 && year % 100 != 0;
		boolean con2 = year % 400 == 0;
		if(con1 || con2){
			System.out.println(year + "是闰年");	
		}
		else
			System.out.println(year + "不是闰年");	
	}
}
```
---
![[练习题-if分支控制-3.png]] 
```java
import java.util.Scanner;
public class If03{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入保国通知的芝麻信用分(1~100分)");
		int score = myScanner.nextInt();
		if(score <= 100 && score >= 1){
			System.out.println("保国同志的芝麻信用分为" + score + "分");
			if(score == 100){
				System.out.println("信用极好");
			}
			else if(80 < score && score <= 99){
				System.out.println("信用优秀");
			}
			else if(60 <= score && score <= 90){
				System.out.println("信用一般");
			} 
			else{
				System.out.println("信用不及格");
			}
		}
		else{
			System.out.println("信用分输入有误，请重新输入");
		}
	}
}
```
---
![[练习题-if分支控制-4.png]]
- 输出：
```
b --> true 
b
```
![[练习题-if分支控制-5.png]]
```
c
```
---
![[练习题-if分支控制-6.png]]
```java
import java.util.Scanner;
public class If04{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入月份(1-12)");
		int mon = myScanner.nextInt();
		if(mon <= 10 && mon >= 4){
			System.out.println("请输入年龄");
			int age = myScanner.nextInt();
			if(age >= 18 && age <= 60){
				System.out.println("现在是旺季，请买成人票，票价为60元");
			}else if(age >= 0 && age < 18){
				System.out.println("现在是旺季，请买儿童票，票价为30元");
			}else if(age >= 60){
				System.out.println("现在是旺季，请买老人票，票价为20元");
			}else{
				System.out.println("年龄输入错误");
			}
		}else if ((mon < 4 && mon > 0) || (mon > 10 && mon <= 12)){
			System.out.println("请输入年龄");
			int age = myScanner.nextInt();
			if(age >= 18 && age <= 60){
				System.out.println("现在是淡季，请买成人票，票价为40元");
			}else if(age >= 60 || (age >= 0 && age < 18)){
				System.out.println("现在是淡季，请买其他票，票价为20元");
			}else{
				System.out.println("年龄输入错误");
			}
		}else{
			System.out.println("月份输入错误");
		}
	}
}
```