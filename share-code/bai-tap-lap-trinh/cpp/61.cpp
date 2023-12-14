#include <iostream>
#include <vector>
#include <unordered_set>
using namespace std;

int main() {
    int arrInt[] = {1, 2, 3, 2};
    int n = sizeof(arrInt) / sizeof(arrInt[0]);
    
    vector<int> arrOdd;
    vector<int> arrEven;
    unordered_set<int> uniqueNumbers;
    
    for (int i = 0; i < n; ++i) {
        int num = arrInt[i];
        // Kiểm tra xem số đã xuất hiện chưa
        if (uniqueNumbers.find(num) == uniqueNumbers.end()) {
            uniqueNumbers.insert(num);
            // Kiểm tra số chẵn hoặc lẻ và thêm vào mảng tương ứng
            if (num % 2 == 0) {
                arrEven.push_back(num);
            } else {
                arrOdd.push_back(num);
            }
        }
    }
    
  cout << "arrOdd = [";
    for (int i = 0; i < arrOdd.size(); ++i) {
        cout << arrOdd[i];
        if (i < arrOdd.size() - 1) {
            cout << ",";
        }
    }
    cout << "]" << endl;
    
    cout << "arrEven = [";
    for (int i = 0; i < arrEven.size(); ++i) {
        cout << arrEven[i];
        if (i < arrEven.size() - 1) {
            cout << ",";
        }
    }
    cout << "]" << endl;
    
    return 0;
}