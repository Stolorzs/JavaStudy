[返回](常用类.md)

# System类常用方法
- [System类常用方法](#system类常用方法)
  - [`exit`退出当前程序](#exit退出当前程序)
  - [`arraycopy`复制数组元素](#arraycopy复制数组元素)
  - [`currentTimeMillens`返回当前时间距离1970-1-1-0:00的毫秒数](#currenttimemillens返回当前时间距离1970-1-1-000的毫秒数)
  - [`gc`运行垃圾回收机制](#gc运行垃圾回收机制)


## `exit`退出当前程序
```java
System.exit(0);//程序退出，0表示一个的状态
```
## `arraycopy`复制数组元素
比较适合底层调用，一般使用Array.copyOf完成数组复制
## `currentTimeMillens`返回当前时间距离1970-1-1-0:00的毫秒数
## `gc`运行垃圾回收机制