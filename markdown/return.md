[返回](控制结构.md)

# return
- 基本介绍：使用在方法上，表示跳出所在的方法
- 如果return写在main方法，会退出程序

```java
for(int i = 1; i <= 5; i++){
    if(i == 3){
        System.out.println("韩顺平教育" + i);
        return; 
        // continue;
        // break; 
    }
}
System.out.println("go on…");
```