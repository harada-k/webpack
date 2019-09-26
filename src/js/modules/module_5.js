'use strict'

import axios from 'axios'
import jsonpAdapter from 'axios-jsonp'

export default function module5 () {
  axios({
    url: 'http://localhost:8888/jsonp.php',
    adapter: jsonpAdapter
  }).then((res) => {
    const wrapper = document.querySelector('.js-jsonp');
    let item = [];
    Array.prototype.forEach.call(res.data, (el) => {
      item += `
        <div style="margin-bottom: 20px; line-height: 1.4; font-size: 16px;">
          <p>${el.title}</p>
          <p>${el.description}</p>
          <p>${el.url}</p>
        </div>
      `
    });
    wrapper.innerHTML = item
  });
}
