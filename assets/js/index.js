//сортировка по датам
function dateToTimestamp(dateStr) {
    return new Date(dateStr).getTime();
}
function compareDates(a, b) {
    return dateToTimestamp(a.date) - dateToTimestamp(b.date);
}
items.sort(compareDates);
const reversedItems = [...items].reverse();

const lasNewsItem = reversedItems[0];
document.cookie = "lastNewsItem=" + encodeURIComponent(JSON.stringify(lasNewsItem))+ "; path=/";

