- Bài 29. Thiếu trường hợp không thể chia cho 0, có thể gán sẵn các giá trị ban đầu để test luôn k cần tốn thao tác nhập từ người dùng.
- Bài 46. Đã dùng else if thì không cần `totalLine >= 10`
- Bài 47. Từ 15 tuổi trở lên thì nên là `>= 15`, không phải `> 15`
- Bài 30. Code sai logic, và thiếu khoảng trắng ở mỗi số
- Bài 31. Kết quả demo trên web, mỗi số cách nhau một khoảng trắng chứ k phải xuống dòng
- Bài 10. Có thể bỏ thao tác nhập số, nên nối chuỗi trong vòng lặp, kết thúc vòng lặp hãy in ra, dùng toán tử 3 ngồi thay cho if else code sẽ gọn gàng hơn (một số bài khác cũng như thế). Nếu đã quay video thì thôi khỏi quay lại, còn nếu chưa quay thì sửa lại code rồi quay như code anh góp ý

```cpp
#include <iostream>
#include <string>
using namespace std;
int main()
{
    int number = 1;
    int yourNumber = 4;
    int sum = 0;
    string result = "";
    while (number <= yourNumber)
    {
        sum += number;
        string sign = number < yourNumber ? " + " : " = ";
        result += to_string(number) + sign;
        number++;
    }
    cout << result << sum;
}
```

- Bài 24,25,26: như bài 10

