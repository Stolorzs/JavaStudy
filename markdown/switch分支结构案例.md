<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

[返回](分支控制(if,%20else,%20switch).md)

![switch分支结构案例1.png](switch分支结构案例1.png.md)
```java
import java.util.Scanner;
public class Switch01{
	public static void main(String[] args){
		Scanner myScanner = new Scanner(System.in);
		System.out.println("请输入一个字符(a-g)");
		char c1 = myScanner.next().charAt(0);
		//在java中，有值返回，就是表达式
		switch(c1){
			case 'a' :
				System.out.println("今天是星期一");
				break;
			case 'b' :
				System.out.println("今天是星期二");
				break;
			case 'c' :
				System.out.println("今天是星期三");
				break;
			case 'd' :
				System.out.println("今天是星期四");
				break;
			case 'e' :
				System.out.println("今天是星期五");
				break;
			case 'f' :
				System.out.println("今天是星期六");
				break;
			case 'g' :
				System.out.println("今天是星期天");
				break;
			default :
				System.out.println("输入无效");
				break;
		}
		System.out.println("退出switch，继续执行程序");
	}
}
```