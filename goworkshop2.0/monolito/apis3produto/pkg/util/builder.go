// Go Api server
// @jeffotoni

package util

import "strings"
import "strconv"

func BuildJSON(strs ...interface{}) string {
	var sb strings.Builder
	for _, str := range strs {
		switch str.(type) {
		case nil:
			sb.WriteString("nil")
			break
		case int:
			sb.WriteString(strconv.Itoa(int(str.(int))))
			break
		case int32:
			sb.WriteString(strconv.FormatInt(int64(str.(int32)), 10))
			break
		case int64:
			sb.WriteString(strconv.FormatInt(int64(str.(int64)), 10))
			break
		case string:
			sb.WriteString(string(str.(string)))
			break
		case float64:
			sb.WriteString(strconv.FormatFloat(str.(float64), 'f', 6, 64))
			break
		case float32:
			sb.WriteString(strconv.FormatFloat(float64(str.(float32)), 'f', 6, 64))
			break
		default:
			break
		}
	}
	return sb.String()
}

func Concat(strs ...interface{}) string {
	var sb strings.Builder
	for _, str := range strs {
		switch str.(type) {
		case nil:
			sb.WriteString("nil")
			break
		case int:
			sb.WriteString(strconv.Itoa(int(str.(int))))
			break
		case int32:
			sb.WriteString(strconv.FormatInt(int64(str.(int32)), 10))
			break
		case int64:
			sb.WriteString(strconv.FormatInt(int64(str.(int64)), 10))
			break
		case string:
			sb.WriteString(string(str.(string)))
			break
		case float64:
			sb.WriteString(strconv.FormatFloat(str.(float64), 'f', 6, 64))
			break
		case float32:
			sb.WriteString(strconv.FormatFloat(float64(str.(float32)), 'f', 6, 64))
			break
		default:
			break
		}
	}
	return sb.String()
}

func BuildString(strs ...string) string {
	var sb strings.Builder
	for _, str := range strs {
		sb.WriteString(str)
	}
	return sb.String()
}

func Printnew(strs ...interface{}) {
	var sb strings.Builder
	for _, str := range strs {
		switch str.(type) {
		case nil:
			sb.WriteString("nil")
			break
		case int:
			sb.WriteString(strconv.Itoa(int(str.(int))))
			break
		case int32:
			sb.WriteString(strconv.FormatInt(int64(str.(int32)), 10))
			break
		case int64:
			sb.WriteString(strconv.FormatInt(int64(str.(int64)), 10))
			break
		case string:
			sb.WriteString(string(str.(string)))
			break
		case float64:
			sb.WriteString(strconv.FormatFloat(str.(float64), 'f', 6, 64))
			break
		case float32:
			sb.WriteString(strconv.FormatFloat(float64(str.(float32)), 'f', 6, 64))
			break
		default:
			break
		}
	}

	Print(sb.String())
}
