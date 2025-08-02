let offset = 0;
const limit = 4;
const newsContainer = document.getElementById('newsBlockParent');
const buttContainer = document.getElementById('newsBlockButtons');

//вывод новостей на главной странице
function displayNews() {
    const newsToDisplay = reversedItems.slice(offset, offset + limit);
    console.log(reversedItems)
    const bannerBlock = document.getElementById('banner');
    bannerBlock.addEventListener('click', () =>{
        document.cookie = "newsItemId=" + encodeURIComponent(JSON.stringify(reversedItems[0].id))+ "; path=/";
    })

    newsToDisplay.forEach(newsItem => {
        console.log(newsItem.id)
        const date = new Date(newsItem.date);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        const formattedDate = `${day}.${month}.${year}`;
        const newsBlock = document.createElement('div');
        newsBlock.classList.add('newsBlockChild');
        newsBlock.innerHTML = ` 
            <a href="index.php?page=news-${newsItem.id}" id="${newsItem.id}">
                <div class="dateBlock"><p>${formattedDate}</p></div>
                <h2 class='newsBlockChildTitle'>${newsItem.title}</h2>
                <div class="newsBlockChildText">${newsItem.announce}</div>
                <button class="moreInfoButton">Подробнее</button>
            </a>
            
        `;
        newsContainer.appendChild(newsBlock);
        const newsBlockA = document.getElementById(newsItem.id);
        
        newsBlockA.addEventListener('click', () =>{
            document.cookie = "newsItemId=" + encodeURIComponent(JSON.stringify(newsBlockA.id))+ "; path=/";
            console.log('click')
            console.log(newsBlockA.id)
        })

    });

    for (let i = 0; i < Math.floor(items.length / limit) + items.length%limit; i++){
        const pageButton = document.createElement('button');
        pageButton.classList.add('pageButton');
        pageButton.id = i;
        if(i == Math.floor(offset / limit) + offset%limit){
            pageButton.classList.add('active');
        }
        pageButton.innerHTML = ` ${i+1} `;
        buttContainer.appendChild(pageButton);

        pageButton.addEventListener('click', () =>{
            offset=limit * pageButton.id;
            newsContainer.innerHTML='';
            buttContainer.innerHTML='';
            displayNews();
        })
    }
    if(offset<items.length-3){
        const nextPage = document.createElement('button');
        nextPage.classList.add('pageButton');
        nextPage.classList.add('nextPage');
        nextPage.id = 'nextPage';
        nextPage.innerHTML = ` -> `;
        buttContainer.appendChild(nextPage);
    }

    nextPage.addEventListener('click', () =>{
        offset+=limit;
        console.log(offset, items.length-3)
        
        newsContainer.innerHTML='';
        buttContainer.innerHTML='';
        displayNews();
    })
}    



displayNews();