// Hàm để đọc số nguyên dương
#include <iostream>
using namespace std;
int main() {
    int yourNumber = 42;
    const string one_to_nineteen[] = {"", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín", "mười", "mười một", "mười hai", "mười ba", "mười bốn", "mười lăm", "mười sáu", "mười bảy", "mười tám", "mười chín"};
    const string tens[] = {"", "", "hai mươi", "ba mươi", "bốn mươi", "năm mươi", "sáu mươi", "bảy mươi", "tám mươi", "chín mươi"};
    string result = "";

    if (yourNumber >= 1 && yourNumber <= 99) {
        if (yourNumber < 20) {
            result = one_to_nineteen[yourNumber];
        } else {
            result = tens[yourNumber / 10] + " " + one_to_nineteen[yourNumber % 10];
        }
    }
    cout << result << endl;
    return 0;
}