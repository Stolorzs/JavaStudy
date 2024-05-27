[返回](常用类.md)

# Math类常用方法

- abs 求绝对值
- pow 求幂
- ceil 向上取整，返回>=该参数的最小整数(转成double)
- floor 向下取整，返回<=该参数的最大整数(转成double)
- round 四舍五入，即+0.5(转成long)
- sqrt 开方，无结果得到NaN(Not a number)
- random 返回0~1之间的一个随机小数:`[0, 1)`
  - 思考：写出获取`[a,b]`之间的随机整数
```java
[a, b]
(int)(a + (b - a + 1) * Math.random());
```
- max 最大值
- min 最小值
