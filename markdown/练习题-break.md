---
 
---
[返回](练习题.md)

![[练习题-break-1.png]]
```java
import java.math;
public class BreakExercise01{
	public static void main(String[] args){
		int count = 0;
		int num1;
		do{
		num1 = (int)(Math.random()*100 + 1);
		System.out.println(num1);
		count++;
		}while(num1 != 97);
		System.out.println("用了" + count + "次")
	}
}
```

![[练习题-break-2.png]]
```java
public class BreakExercise02{
	public static void main(String[] args){
		int num = 1;
		int sum = 0;
		for(int i = 1; i <= 100; i++){
			sum += i;
			if(sum > 20){
				num = i;
				break;
			}
		}
		System.out.println("当前数为" + num);
	}
}
```

![[练习题-break-3.png]]

```java
import java.util.Scanner;
public class BreakExercise03{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		label1:
		for(int j = 0; j == 0; j++){
			for(int i = 3; i >= 1; i--){
				System.out.println("请输入用户名");
				String name = myScanner.next();
				System.out.println("请输入密码");
				String password = myScanner.next();
				if(name == "丁真" && password == "666"){
					System.out.println("登录成功");
					break label1;
				}else if(i != 1){
					System.out.println("密码输入错误，你还有" + (i-1) + "次机会");
				}
			}
			System.out.println("密码输入错误，你没机会了");
		}
	}
}
```
```java
//修改
import java.util.Scanner;
public class BreakExercise03{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		String name = "";
		String password = "";
		int chance = 3; //登录一次-1
		for(int i = 1; i <= 3; i++){
			System.out.println("请输入用户名");
			name = myScanner.next();
			System.out.println("请输入密码");
			password = myScanner.next();
			//开始比较，补充说明，字符串内容比较使用的是 equals方法
			if(name.equals("丁真") && password.equals("666")){ 
			// 或 "林黛玉".equals(name)  推荐这种，可以避免空指针
				System.out.println("恭喜你，登录成功~");
				break;
			}
			chance--;
			System.out.println("密码输入错误，你还有" + chance + "次机会");
			
		}
	}
}
```